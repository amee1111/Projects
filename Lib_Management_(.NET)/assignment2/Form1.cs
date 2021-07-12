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
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            string s = @"Data Source=(LocalDB)\MSSQLLocalDB;AttachDbFilename=c:\users\admin\documents\visual studio 2015\Projects\assignment2\assignment2\assignment1database.mdf;Integrated Security=True";
            SqlConnection con = new SqlConnection(s);
            string name = textBox1.Text;
            int sem = Convert.ToInt32(comboBox1.SelectedItem);
            string branch = textBox2.Text;

            string q1 = "insert into student values('" + name + "', " + sem + ", '" + branch + "')";

            SqlCommand cmd = new SqlCommand(q1, con);
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
    }
}
