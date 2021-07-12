using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Data.Sql;
using System.Data.SqlClient;

namespace assignment2
{
    public partial class returnbook : Form
    {
        public returnbook()
        {
            InitializeComponent();
        }

        private void returnbook_Load(object sender, EventArgs e)
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
            con2.Open();
            // Console.WriteLine(dt.Rows[0][4]);
            string sel1 = "select * from issue where std_id='" + std_id + "'";
            SqlConnection con3 = new SqlConnection(s);
            SqlDataAdapter da1 = new SqlDataAdapter(sel1, s);
            DataTable dt1 = new DataTable();
            da1.Fill(dt1);
            con3.Open();

            
            int book_id = Convert.ToInt32(dt1.Rows[0][1]);

            int count = dt1.Rows.Count;

            int available = Convert.ToInt32(dt.Rows[0][4]);
           
            if (dt.Rows.Count > 0)
            {

                int nowavailable = available + 1;
                string update = "update book set book_available='" + nowavailable + "' where book_title='" + title + "' and book_author='" + author + "'";
                string ins = "delete from issue where std_id='"+std_id+"' and book_id='"+book_id+"'";
                SqlConnection con5 = new SqlConnection(s);
                SqlCommand cmd1 = new SqlCommand(update, con3);
                SqlCommand cmd2 = new SqlCommand(ins, con3);
                con5.Open();
                cmd1.ExecuteNonQuery();
                cmd2.ExecuteNonQuery();
                MessageBox.Show("Book Returned!!");

            }
            else
            {
                MessageBox.Show("Error");
            }

        }
    }
}
