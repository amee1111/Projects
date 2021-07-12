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
    public partial class showRecord : Form
    {
        public showRecord()
        {
            InitializeComponent();
        }

        private void showRecord_Load(object sender, EventArgs e)
        {
            string s = @"Data Source=(LocalDB)\MSSQLLocalDB;AttachDbFilename=c:\users\admin\documents\visual studio 2015\Projects\assignment2\assignment2\assignment1database.mdf;Integrated Security=True";
            DataTable dt = new DataTable();
            string sel = "select name from student";
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
            try
            {
                string s = @"Data Source=(LocalDB)\MSSQLLocalDB;AttachDbFilename=c:\users\admin\documents\visual studio 2015\Projects\assignment2\assignment2\assignment1database.mdf;Integrated Security=True";
                string name = comboBox1.SelectedItem.ToString();
                DataTable dt2 = new DataTable();
                string sel = ("select book_id from issue where name = '" + name + "'");
                SqlDataAdapter adt1 = new SqlDataAdapter(sel, s);
                adt1.Fill(dt2);
                listBox1.Items.Clear();
                for (int i = 0; i < dt2.Rows.Count; i++)
                {
                    int book_id = Convert.ToInt32(dt2.Rows[i][0]);
                    string finalSQL = "select book_title from book where book_id = '" + book_id + "' ";
                    SqlDataAdapter da3 = new SqlDataAdapter(finalSQL, s);

                    DataTable dt3 = new DataTable();
                    da3.Fill(dt3);
                    
                    if (dt3.Rows.Count > 0)
                    {

                        for (int j = 0; j < dt3.Rows.Count;j++)
                        {
                            listBox1.Items.Add(dt3.Rows[j][0]);

                        }
                    }
                    else
                    {

                        Console.WriteLine("DATA NOT FOUND");
                    }
                }
                
                //string s2 = "select book_title from student as s INNER JOIN issue as i ON s.name=i.name INNER JOIN book as b ON b.book_id=i.book_id;";
                //SqlDataAdapter da3 = new SqlDataAdapter(s2, s);

               
            }
            catch {
                listBox1.Items.Clear();
                MessageBox.Show("No issued books!!");
            }

        }
    }
}
