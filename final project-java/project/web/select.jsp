<%-- 
    Document   : select
    Created on : Oct 5, 2020, 1:19:28 PM
    Author     : nidhi
--%>

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
            int reg_no = Integer.parseInt(request.getParameter("rg"));
            Class.forName("com.mysql.jdbc.Driver");
            Connection con=DriverManager.getConnection("jdbc:mysql://localhost:3306/project","root","");
            PreparedStatement p1 = con.prepareStatement("SELECT firstname,lastname, gender, fname, mname,bdate,btime, place, hospital from birth1 WHERE reg_no = ?");
            p1.setInt(1, reg_no);
            ResultSet r1 = p1.executeQuery();
            r1.next();
            
            String name= r1.getString("firstname");
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
