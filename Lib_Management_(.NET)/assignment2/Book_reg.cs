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
    public partial class Book_reg : Form
    {
        public Book_reg()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            string s = @"Data Source=(LocalDB)\MSSQLLocalDB;AttachDbFilename=c:\users\admin\documents\visual studio 2015\Projects\assignment2\assignment2\assignment1database.mdf;Integrated Security=True";
            SqlConnection con = new SqlConnection(s);
            string title = textBox1.Text;
            string author = textBox2.Text;
            int quantity = Convert.ToInt32(textBox3.Text);

            string q2 = "insert into book values('" + title + "', '" + author + "', " + quantity + ", " + quantity + ")";

            SqlCommand cmd = new SqlCommand(q2, con);
            try
            {
                con.Open();
                cmd.ExecuteNonQuery();
                MessageBox.Show("Registration Successfull!!");
            }
            catch
            {
                MessageBox.Show("Error!!");
                con.Close();
            }
        }

        private void Book_reg_Load(object sender, EventArgs e)
        {

        }
    }
}
