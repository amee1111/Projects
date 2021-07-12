<%-- 
    Document   : delete
    Created on : Oct 5, 2020, 2:53:26 PM
    Author     : nidhi
--%>
<%@page import="java.sql.Statement"%>
<%@page import="java.sql.Time"%>
<%@page import="java.sql.Date"%>
<%@page import="java.sql.ResultSet"%>
<%@page import="java.sql.DriverManager"%>
<%@page import="java.sql.PreparedStatement"%>
<%@page import="java.sql.Connection"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <%
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
            String place = r1.getString("place");
            String hospital = r1.getString("hospital");
            String ddate = request.getParameter("ddate");
            Date death =Date.valueOf(ddate);
            String dplace = request.getParameter("dplace");
            PreparedStatement p2 = con.prepareStatement("DELETE from birth1 where reg_no = '"+r+"'");
            int r2 = p2.executeUpdate();
            Statement stmt = con.createStatement();
            
            int i = stmt.executeUpdate("insert into death(reg_no, firstname, lastname, gender, fname, mname, bdate, btime, place, hospital, ddate, dplace) values ('"+r+"','"+name+"','"+lname+"','"+gender+"','"+fname+"','"+mname+"', '"+birth+"','"+time+"','"+place+"','"+hospital+"', '"+death+"', '"+dplace+"')");
            
            
        %>
        <jsp:forward page="deathcertificate.jsp">
            <jsp:param name="rg1" value="<%=r%>"/>
            <jsp:param name="name1" value="<%=name%>"/>
            <jsp:param name="lname1" value="<%=lname%>"/>
            <jsp:param name="fname1" value="<%=fname%>"/>
            <jsp:param name="mname1" value="<%=mname%>"/>
            <jsp:param name="gender1" value="<%=gender%>"/>
            <jsp:param name="birth1" value="<%=birth%>"/>
            <jsp:param name="time1" value="<%=time%>"/>
            <jsp:param name="place1" value="<%=place%>"/>
            <jsp:param name="hospital1" value="<%=hospital%>"/>
            <jsp:param name="ddate1" value="<%=ddate%>"/>
            <jsp:param name="dplace1" value="<%=dplace%>"/>
        </jsp:forward>
        
        
    </body>
</html>
