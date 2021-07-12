package org.apache.jsp;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;

public final class certificate_jsp extends org.apache.jasper.runtime.HttpJspBase
    implements org.apache.jasper.runtime.JspSourceDependent {

  private static final JspFactory _jspxFactory = JspFactory.getDefaultFactory();

  private static java.util.List<String> _jspx_dependants;

  private org.glassfish.jsp.api.ResourceInjector _jspx_resourceInjector;

  public java.util.List<String> getDependants() {
    return _jspx_dependants;
  }

  public void _jspService(HttpServletRequest request, HttpServletResponse response)
        throws java.io.IOException, ServletException {

    PageContext pageContext = null;
    HttpSession session = null;
    ServletContext application = null;
    ServletConfig config = null;
    JspWriter out = null;
    Object page = this;
    JspWriter _jspx_out = null;
    PageContext _jspx_page_context = null;

    try {
      response.setContentType("text/html;charset=UTF-8");
      pageContext = _jspxFactory.getPageContext(this, request, response,
      			null, true, 8192, true);
      _jspx_page_context = pageContext;
      application = pageContext.getServletContext();
      config = pageContext.getServletConfig();
      session = pageContext.getSession();
      out = pageContext.getOut();
      _jspx_out = out;
      _jspx_resourceInjector = (org.glassfish.jsp.api.ResourceInjector) application.getAttribute("com.sun.appserv.jsp.resource.injector");

      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("<!DOCTYPE html>\n");
      out.write("<html>\n");
      out.write("    <head>\n");
      out.write("        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n");
      out.write("        <title>JSP Page</title>\n");
      out.write("        <link rel=\"stylesheet\" href=\"Style.css\">\n");
      out.write("    </head>\n");
      out.write("    <body>\n");
      out.write("        <div class=\"frm\" >\n");
      out.write("            <div class=\"frm1\">\n");
      out.write("            <h5 style=\"text-align: right\">Reg. no:");
      out.print(request.getParameter("rg"));
      out.write("</h5>\n");
      out.write("            <h2 class=\"hd1\" style=\"text-align: center\">BIRTH CERTIFICATE</h2>\n");
      out.write("            <h4 style=\"text-align: center\"> This Certifies That</h4> </br></br></br></br>\n");
      out.write("            <div class=\"div2\" style=\"text-align: center\">\n");
      out.write("                ");
      out.print(request.getParameter("name"));
      out.write("\n");
      out.write("                ");
      out.print(request.getParameter("lname"));
      out.write("\n");
      out.write("                (");
      out.print(request.getParameter("gender"));
      out.write(")\n");
      out.write("                \n");
      out.write("            </div>\n");
      out.write("            <h4 style=\"text-align: center\"> Was born to</h4></br></br>\n");
      out.write("            <div class=\"div3\" style=\"text-align: center\" >\n");
      out.write("                ");
      out.print(request.getParameter("fname"));
      out.write("\n");
      out.write("            </div>\n");
      out.write("            <h4 style=\"text-align: center\"> and </h4></br></br></br>\n");
      out.write("            <div class=\"div4\" style=\"text-align: center\" >\n");
      out.write("                ");
      out.print(request.getParameter("mname"));
      out.write("\n");
      out.write("            </div>\n");
      out.write("            <h4 class=\"hd2\"> on this </h4>\n");
      out.write("            <div class=\"div5\" style=\"text-align: center\" >\n");
      out.write("                ");
      out.print(request.getParameter("birth"));
      out.write("\n");
      out.write("            </div>\n");
      out.write("            <h4 class=\"hd3\"> at </h4>\n");
      out.write("            <div class=\"div6\" style=\"text-align: center\" >\n");
      out.write("                ");
      out.print(request.getParameter("time"));
      out.write("\n");
      out.write("            </div></br></br>\n");
      out.write("            <h4 class=\"hd4\"> at </h4>\n");
      out.write("            <div class=\"div7\" style=\"text-align: center\" >\n");
      out.write("                ");
      out.print(request.getParameter("place"));
      out.write("\n");
      out.write("            </div></br></br></br>\n");
      out.write("            <h4 class=\"hd5\"> at </h4>\n");
      out.write("            <div class=\"div8\" style=\"text-align: center\" > \n");
      out.write("                ");
      out.print(request.getParameter("hospital"));
      out.write("\n");
      out.write("            </div>\n");
      out.write("            <h4 class=\"hd6\"> Hospital. </h4>\n");
      out.write("            <div class=\"div9\"> </div>\n");
      out.write("            <div class=\"div10\"> </div></br>\n");
      out.write("            <h4 class=\"hd7\">Created by</h4>\n");
      out.write("            <h4 class=\"hd8\">Government officer</h4>\n");
      out.write("            </div>\n");
      out.write("        </div>\n");
      out.write("    </body>\n");
      out.write("</html>\n");
    } catch (Throwable t) {
      if (!(t instanceof SkipPageException)){
        out = _jspx_out;
        if (out != null && out.getBufferSize() != 0)
          out.clearBuffer();
        if (_jspx_page_context != null) _jspx_page_context.handlePageException(t);
        else throw new ServletException(t);
      }
    } finally {
      _jspxFactory.releasePageContext(_jspx_page_context);
    }
  }
}
