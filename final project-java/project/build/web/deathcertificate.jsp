<%-- 
    Document   : deathcertificate
    Created on : Oct 5, 2020, 2:56:22 PM
    Author     : nidhi
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="Style.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
        
    </head>
    <body>
        <div class="frm2" >
            <div class="frm3">
            <h5 style="text-align: right">Reg. no:<%=request.getParameter("rg1")%></h5>
            <h2 class="hd1" style="text-align: center">DEATH CERTIFICATE</h2>
            <h4 style="text-align: center"> This Certifies That</h4> </br></br></br></br>
            <div class="div2" style="text-align: center">
                <%=request.getParameter("name1")%>
                <%=request.getParameter("lname1")%>
                (<%=request.getParameter("gender1")%>)
                
            </div>
            <h4 style="text-align: center" class="hd14"> was born to</h4></br></br>
            <div class="div3" style="text-align: center" >
                <%=request.getParameter("fname1")%>
            </div>
            <h4 style="text-align: center" class="hd15"> and </h4></br></br></br>
            <div class="div4" style="text-align: center" >
                <%=request.getParameter("mname1")%>
            </div>
            <h4 class="hd2"> on this </h4>
            <div class="div5" style="text-align: center" >
                <%=request.getParameter("birth1")%>
            </div>
            <h4 class="hd3"> at </h4>
            <div class="div6" style="text-align: center" >
                <%=request.getParameter("time1")%>
            </div></br></br>
            <h4 class="hd4"> at </h4>
            <div class="div7" style="text-align: center" >
                <%=request.getParameter("place1")%>
            </div></br></br></br>
            <h4 class="hd5"> at </h4>
            <div class="div8" style="text-align: center" > 
                <%=request.getParameter("hospital1")%>
            </div>
            <h4 class="hd6"> Hospital </h4>
            <h4 class="hd9"> has lost his/her life </h4>
            <h4 class="hd10">on this </h4>
            <div class="div11" >
                <%=request.getParameter("ddate1")%>
            </div>
            <h4 class="hd11">at</h4>
            <div class="div12">
                <%=request.getParameter("dplace")%>.
            </div>
            <div class="div13"> </div>
            <div class="div14"> </div></br>
            <h4 class="hd12">Created by</h4>
            <h4 class="hd13">Government officer</h4>
            </div>
        </div>
            <a href="index.html" class="link1" style="text-align: center">Exit!!</a>
    </body>
</html>
