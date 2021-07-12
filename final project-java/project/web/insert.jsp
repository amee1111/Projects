<%-- 
    Document   : insert
    Created on : Oct 7, 2020, 4:38:48 PM
    Author     : nidhi
--%>

<%@page import="java.sql.ResultSet"%>
<%@page import="java.sql.PreparedStatement"%>
<%@page import="java.sql.DriverManager"%>
<%@page import="java.sql.Statement"%>
<%@page import="java.sql.Connection"%>
<%@page import="java.sql.Time"%>
<%@page import="java.sql.Date"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <%
            
            String name = request.getParameter("name");
            
            String lname = request.getParameter("lname");
            
            String gender = request.getParameter("gender");
            
            String fname = request.getParameter("fname");
            
            String mname = request.getParameter("mname");
            
            String bdate = request.getParameter("bdate");
            Date birth = Date.valueOf(bdate);
            
            String btime = request.getParameter("btime");
            Time time = Time.valueOf(btime);
            
            String place = request.getParameter("place");
            
            String hospital = request.getParameter("hospital");
            
            Class.forName("com.mysql.jdbc.Driver");
            
            Connection con=DriverManager.getConnection("jdbc:mysql://localhost:3306/project","root","");
            
            Statement st = con.createStatement();
            int i = st.executeUpdate("insert into birth1 ( firstname, lastname,gender, fname, mname, bdate, btime, place, hospital) values ('"+name+"','"+lname+"','"+gender+"','"+fname+"','"+mname+"', '"+birth+"','"+time+"','"+place+"','"+hospital+"')");           
            PreparedStatement p1 = con.prepareStatement("SELECT reg_no from birth1 WHERE firstname = ? AND lastname=? AND btime=? ");
            p1.setString(1, name);
            p1.setString(2, lname);
            p1.setTime(3,time);
            ResultSet r1 = p1.executeQuery();
            r1.next();
            int reg_no = r1.getInt("reg_no");
        %> 
         <jsp:forward page="certificate.jsp">
            <jsp:param name="rg" value="<%=reg_no%>"/>
             <jsp:param name="name" value="<%=name%>"/>
            <jsp:param name="lname" value="<%=lname%>"/>
            <jsp:param name="fname" value="<%=fname%>"/>
            <jsp:param name="mname" value="<%=mname%>"/>
            <jsp:param name="gender" value="<%=gender%>"/>
            <jsp:param name="birth" value="<%=birth%>"/>
            <jsp:param name="time" value="<%=time%>"/>
            <jsp:param name="place" value="<%=place%>"/>
            <jsp:param name="hospital" value="<%=hospital%>"/>
        </jsp:forward>

    </body>
</html>
