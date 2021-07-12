/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.Date;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import java.sql.Time;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 *
 * @author nidhi
 */
public class birth extends HttpServlet {

    /**
     * Processes requests for both HTTP <code>GET</code> and <code>POST</code>
     * methods.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException, ClassNotFoundException {
        response.setContentType("text/html;charset=UTF-8");
        try (PrintWriter out = response.getWriter()) {
            /* TODO output your page here. You may use following sample code. */
            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
            out.println("<title>Servlet birth</title>");            
            out.println("</head>");
            out.println("<body>");
            
            String name = request.getParameter("name");
            
            String lname = request.getParameter("lname");
            
            String gender = request.getParameter("gender");
            
            String fname = request.getParameter("fname");
            
            String mname = request.getParameter("mname");
            
            String bdate = request.getParameter("bdate");
            Date date = Date.valueOf(bdate);
            
            String btime = request.getParameter("btime");
            Time time = Time.valueOf(btime);
            
            String bplace = request.getParameter("place");
            
            String hospital = request.getParameter("hospital");
            
            Class.forName("com.mysql.jdbc.Driver");
            
            Connection con=DriverManager.getConnection("jdbc:mysql://localhost:3306/project","root","");
            
            Statement st = con.createStatement();
            
            //int i = st.executeUpdate("insert into birth1 ( firstname, lastname,gender, fname, mname, bdate, btime, place, hospital) values ('"+name+"','"+lname+"','"+gender+"','"+fname+"','"+mname+"', '"+date+"','"+time+"','"+bplace+"','"+hospital+"')");
            out.println("inserted :)");
            int reg_no = 0;
            ResultSet j = st.executeQuery("select reg_no from birth1 WHERE firstname='Amee' AND lastname='Unadkat' AND fname='Atul Unadkat'");
            out.println(reg_no);
            //request.getRequestDispatcher("birthcertificate.jsp").forward(request, response);
            
            out.println("</body>");
            out.println("</html>");
        }catch(Exception e){}
    }

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        try {
            processRequest(request, response);
        } catch (ClassNotFoundException ex) {
            Logger.getLogger(birth.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    /**
     * Handles the HTTP <code>POST</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        try {
            processRequest(request, response);
        } catch (ClassNotFoundException ex) {
            Logger.getLogger(birth.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    /**
     * Returns a short description of the servlet.
     *
     * @return a String containing servlet description
     */
    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
