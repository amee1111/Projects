using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace assignment2
{
    public partial class Form2 : Form
    {
        public Form2()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            Form1 frm1 = new Form1();
            frm1.Show();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            Book_reg frm2 = new Book_reg();
            frm2.Show();
        }

        private void button3_Click(object sender, EventArgs e)
        {
            issue_book frm3 = new issue_book();
            frm3.Show();
        }

        private void button4_Click(object sender, EventArgs e)
        {
            returnbook frm4 = new returnbook();
            frm4.Show();
        }

        private void button5_Click(object sender, EventArgs e)
        {
            showRecord frm5 = new showRecord();
            frm5.Show();
        }
    }
}
