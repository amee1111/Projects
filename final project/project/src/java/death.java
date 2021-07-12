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
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
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
public class death extends HttpServlet {

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
            throws ServletException, IOException, ClassNotFoundException, SQLException {
        response.setContentType("text/html;charset=UTF-8");
        try (PrintWriter out = response.getWriter()) {
            /* TODO output your page here. You may use following sample code. */
            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
            out.println("<title>Servlet death</title>");            
            out.println("</head>");
            out.println("<body>");
            int r = Integer.parseInt(request.getParameter("rg"));
            Class.forName("com.mysql.jdbc.Driver");
            Connection con=DriverManager.getConnection("jdbc:mysql://localhost:3306/project","root","");
            PreparedStatement p1 = con.prepareStatement("SELECT firstname,lastname, gender, fname, mname,bdate,btime, place, hospital from birth1 WHERE reg_no = ?");
            p1.setInt(1, r);
            ResultSet r1 = p1.executeQuery();
            r1.next();
            String name = r1.getString("firstname");
            String lname = r1.getString("lastname");
            String gender = r1.getString("gender");
            String fname = r1.getString("fname");
            String mname = r1.getString("mname");
            String bdate = r1.getString("bdate");
            Date birth = Date.valueOf(bdate);
            String btime = r1.getString("btime");
            Time time = Time.valueOf(btime);
            String bplace = r1.getString("place");
            String hospital = r1.getString("hospital");
            String ddate = request.getParameter("ddate");
            Date death =Date.valueOf(ddate);
            String dplace = request.getParameter("dplace");
            PreparedStatement p2 = con.prepareStatement("DELETE from birth1 where reg_no = '"+r+"'");
            int r2 = p2.executeUpdate();
            Statement stmt = con.createStatement();
            
            int i = stmt.executeUpdate("insert into death(reg_no, firstname, lastname, gender, fname, mname, bdate, btime, place, hospital, ddate, dplace) values ('"+r+"','"+name+"','"+lname+"','"+gender+"','"+fname+"','"+mname+"', '"+birth+"','"+time+"','"+bplace+"','"+hospital+"', '"+death+"', '"+dplace+"')");
            
            out.println("DELETED:)");
            out.println("<h1>Servlet death at " + request.getContextPath() + "</h1>");
            out.println("</body>");
            out.println("</html>");
        }
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
            Logger.getLogger(death.class.getName()).log(Level.SEVERE, null, ex);
        } catch (SQLException ex) {
            Logger.getLogger(death.class.getName()).log(Level.SEVERE, null, ex);
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
            Logger.getLogger(death.class.getName()).log(Level.SEVERE, null, ex);
        } catch (SQLException ex) {
            Logger.getLogger(death.class.getName()).log(Level.SEVERE, null, ex);
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
