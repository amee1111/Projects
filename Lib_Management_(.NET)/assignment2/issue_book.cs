using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Data;
using System.Data.Sql;
using System.Data.SqlClient;

namespace assignment2
{
    public partial class issue_book : Form
    {
        public issue_book()
        {
            InitializeComponent();
        }

        private void issue_book_Load(object sender, EventArgs e)
        {
            string s = @"Data Source=(LocalDB)\MSSQLLocalDB;AttachDbFilename=c:\users\admin\documents\visual studio 2015\Projects\assignment2\assignment2\assignment1database.mdf;Integrated Security=True";
            DataTable dt = new DataTable();
            string sel = "select std_id from student";
            SqlDataAdapter adt = new SqlDataAdapter(sel, s);
            adt.Fill(dt);
            if (dt.Rows.Count > 0)
            {
                for (int i = 0; i < dt.Rows.Count; i++)
                {
                    comboBox1.Items.Add(dt.Rows[i][0]);
                }
            }
            else
            {
                MessageBox.Show("No data!!");
            }
        }

        private void button1_Click(object sender, EventArgs e)
        {
            string std_id = comboBox1.SelectedItem.ToString();
            string s = @"Data Source=(LocalDB)\MSSQLLocalDB;AttachDbFilename=c:\users\admin\documents\visual studio 2015\Projects\assignment2\assignment2\assignment1database.mdf;Integrated Security=True";
            string title = textBox1.Text;
            string author = textBox2.Text;

            string sel = "select * from book where book_title='" + title + "' and book_author='" + author + "'";
            SqlConnection con2 = new SqlConnection(s);
            SqlDataAdapter da = new SqlDataAdapter(sel, s);
            DataTable dt = new DataTable();
            da.Fill(dt);
            int bookid = Convert.ToInt32(dt.Rows[0][0]);
            con2.Open();
            // Console.WriteLine(dt.Rows[0][4]);
            string sel1 = "select std_id from issue where std_id='" + std_id + "'";
            SqlConnection con3 = new SqlConnection(s);
            SqlDataAdapter da1 = new SqlDataAdapter(sel1, s);
            DataTable dt1 = new DataTable();
            da1.Fill(dt1);
            con3.Open();

            string sel3 = "select book_id from issue where std_id='" + std_id + "'";
            SqlConnection con6 = new SqlConnection(s);
            SqlDataAdapter da3 = new SqlDataAdapter(sel1, s);
            DataTable dt3 = new DataTable();
            da3.Fill(dt3);
            con6.Open();
            int b_id=0;
            for(int i=0; i<dt3.Rows.Count; i++)
            {
                b_id = Convert.ToInt32(dt.Rows[i][0]);
            }
           

            string sel2 = "select name from student where std_id='" + std_id + "'";
            SqlConnection con4 = new SqlConnection(s);
            SqlDataAdapter da2 = new SqlDataAdapter(sel2, s);
            DataTable dt2 = new DataTable();
            da2.Fill(dt2);
            con4.Open();



            string name = dt2.Rows[0][0].ToString();

            int count = dt1.Rows.Count;

            int available = Convert.ToInt32(dt.Rows[0][4]);
            if (dt.Rows.Count > 0)
            {
                if (count < 3)
                {
                   if (available != 0)
                   {
                        if (bookid != b_id)
                        {
                            int nowavailable = available - 1;
                            string update = "update book set book_available='" + nowavailable + "' where book_title='" + title + "' and book_author='" + author + "'";
                            string ins = "insert into issue values('" + std_id + "','" + Convert.ToInt32(dt.Rows[0][0]) + "','" + name + "')";
                            SqlConnection con5 = new SqlConnection(s);
                            SqlCommand cmd1 = new SqlCommand(update, con3);
                            SqlCommand cmd2 = new SqlCommand(ins, con3);
                            con5.Open();
                            cmd1.ExecuteNonQuery();
                            cmd2.ExecuteNonQuery();
                            MessageBox.Show("Book Issued!!");
                        }
                        else
                        {
                            MessageBox.Show("You already have this book!!");
                        }
                    }
                    else
                    {
                        MessageBox.Show("No Book Available!!");
                    }
                }
                else
                {
                    MessageBox.Show("Already 3 books are issued!!");
                }
            }

            else
            {
                MessageBox.Show("Error");
            }

        }
    }
}
