<%-- 
    Document   : certificate
    Created on : Oct 4, 2020, 4:46:05 PM
    Author     : nidhi
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        <link rel="stylesheet" href="Style.css">
    </head>
    <body>
        <div class="frm" >
            <div class="frm1">
            <h5 style="text-align: right">Reg. no: <%=request.getParameter("rg")%></h5>
            <h2 class="hd1" style="text-align: center">BIRTH CERTIFICATE</h2>
            <h4 style="text-align: center"> This Certifies That</h4> </br></br></br></br>
            <div class="div15" style="text-align: center">
                <%=request.getParameter("name")%>
                <%=request.getParameter("lname")%>
                (<%=request.getParameter("gender")%>)
            </div>
            <h4 class="hd7"> Was born to</h4>
            <div class="div16" style="text-align: center" >
               <%=request.getParameter("fname")%>
            </div>
            <h4 class="hd8"> and </h4>
            <div class="div17" style="text-align: center" >
                <%=request.getParameter("mname")%>
            </div>
            <h4 class="hd16"> on this </h4>
            <div class="div18" style="text-align: center" >
                <%=request.getParameter("birth")%>
            </div>
            <h4 class="hd17"> at </h4>
            <div class="div19" style="text-align: center" >
                <%=request.getParameter("time")%>
            </div></br></br>
            <h4 class="hd18"> at </h4>
            <div class="div20" style="text-align: center" >
                <%=request.getParameter("place")%>
            </div></br></br></br>
            <h4 class="hd19"> at </h4>
            <div class="div21" style="text-align: center" > 
                <%=request.getParameter("hospital")%>
            </div>
            <h4 class="hd20"> Hospital. </h4>
            <div class="div22"> </div>
            <div class="div23"> </div></br>
            <h4 class="hd21">Created by</h4>
            <h4 class="hd22">Government officer</h4>
            </div>
        </div>
            <a href="index.html" class="link1"  style="text-align: center">Exit!!</a>
    </body>
</html>
