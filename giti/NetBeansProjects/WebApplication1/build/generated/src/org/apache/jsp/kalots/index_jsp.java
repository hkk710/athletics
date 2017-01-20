package org.apache.jsp.kalots;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;
import java.sql.*;

public final class index_jsp extends org.apache.jasper.runtime.HttpJspBase
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
      response.setContentType("text/html");
      pageContext = _jspxFactory.getPageContext(this, request, response,
      			null, true, 8192, true);
      _jspx_page_context = pageContext;
      application = pageContext.getServletContext();
      config = pageContext.getServletConfig();
      session = pageContext.getSession();
      out = pageContext.getOut();
      _jspx_out = out;
      _jspx_resourceInjector = (org.glassfish.jsp.api.ResourceInjector) application.getAttribute("com.sun.appserv.jsp.resource.injector");

      out.write("       \r\n");


 Connection con=DriverManager.getConnection("jdbc:derby://localhost:1527/VAJRA", "superuser", "superuser");

String sql = "SELECT * FROM `TITTLE` WHERE `PAGE`=1 ";
PreparedStatement ps = null;
String pageno;
String color = null;
String text = null;
String font = null;
//ResultSet rs= null;
 ps=con.prepareStatement("select * from title");
             
             ResultSet rs1=ps.executeQuery();
             while(rs1.next())
             {
             pageno = rs1.getString(1).toString();
             color = rs1.getString(2).toString();
             text = rs1.getString(3).toString();
             font = rs1.getString(4).toString();
             
            
            
      

         }

      out.write("\r\n");
      out.write("\r\n");
      out.write("<!DOCTYPE html>\r\n");
      out.write("<html lang=\"en\">\r\n");
      out.write("    <head>\r\n");
      out.write("\t\t<meta charset=\"UTF-8\" />\r\n");
      out.write("        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\"> \r\n");
      out.write("        <title> kalotsavam</title>\r\n");
      out.write("\r\n");
      out.write("\t<script>\r\n");
      out.write("function title1()\r\n");
      out.write("{\r\n");
      out.write("\talert(\"reached title1\");\r\n");
      out.write("\twindow.location.assign(\"titleeditor/page1/page1.php\");\r\n");
      out.write("}\r\n");
      out.write("</script>\r\n");
      out.write("\r\n");
      out.write("\r\n");
      out.write("        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"> \r\n");
      out.write("        <meta name=\"description\" content=\"CSS-only Responsive Layout with Smooth Transitions\" />\r\n");
      out.write("        <meta name=\"keywords\" content=\"css3, transitions, animations, css-only, navigation, smooth scrolling, full width, full height, window width, window height\" />\r\n");
      out.write("        <meta name=\"author\" content=\"Codrops\" />\r\n");
      out.write("        <link rel=\"shortcut icon\" href=\"../favicon.ico\"> \r\n");
      out.write("\t\t<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,700' rel='stylesheet' type='text/css'>\r\n");
      out.write("        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/demo.css\" />\r\n");
      out.write("        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\" />\r\n");
      out.write("\t\t<script type=\"text/javascript\" src=\"js/modernizr.custom.79639.js\"></script> \r\n");
      out.write("\t\t<!--[if lte IE 8]>\r\n");
      out.write("\t\t\t <link rel=\"stylesheet\" type=\"text/css\" href=\"css/simple.css\" />\r\n");
      out.write("\t\t<![endif]-->\r\n");
      out.write("    </head>\r\n");
      out.write("    <body>\r\n");
      out.write("        <div class=\"container\">\r\n");
      out.write("\t\t\r\n");
      out.write("                <div class=\"clr\"></div>\r\n");
      out.write("            </div><!--/ Codrops top bar -->\r\n");
      out.write("\t\t\t\r\n");
      out.write("\t\t\t<div class=\"st-container\">\r\n");
      out.write("\t\t\t\r\n");
      out.write("\t\t\t\t<input type=\"radio\" name=\"radio-set\" checked=\"checked\" id=\"st-control-1\"/>\r\n");
      out.write("\t\t\t\t<a href=\"#st-panel-1\">Home</a>\r\n");
      out.write("\t\t\t\t<input type=\"radio\" name=\"radio-set\" id=\"st-control-2\"/>\r\n");
      out.write("\t\t\t\t<a href=\"#st-panel-2\">Events</a>\r\n");
      out.write("\t\t\t\t<input type=\"radio\" name=\"radio-set\" id=\"st-control-3\"/>\r\n");
      out.write("\t\t\t\t<a href=\"#st-panel-3\">Results</a>\r\n");
      out.write("\t\t\t\t<input type=\"radio\" name=\"radio-set\" id=\"st-control-4\"/>\r\n");
      out.write("\t\t\t\t<a href=\"#st-panel-4\">Teams</a>\r\n");
      out.write("\t\t\t\t<input type=\"radio\" name=\"radio-set\" id=\"st-control-5\"/>\r\n");
      out.write("\t\t\t\t<a href=\"#st-panel-5\">Developers</a>\r\n");
      out.write("\t\t\t\t\r\n");
      out.write("\t\t\t\t<div class=\"st-scroll\">\r\n");
      out.write("\t\t\t\t\r\n");
      out.write("\t\t\t\t\t<!-- Placeholder text from http://hipsteripsum.me/ -->\r\n");
      out.write("\t\t\t\t\t\r\n");
      out.write("\t\t\t\t\t<section class=\"st-panel\" id=\"st-panel-1\">\r\n");
      out.write("\t\t\t\t\t\t<div class=\"st-deco\" data-icon=\"H\">Welcome</div>\r\n");
      out.write("<a href=\"login.html\"><img src=\"images/login-button.png\"></a>\r\n");
      out.write("\t\t\t\t\t\t<h2 onClick=\"title1()\" style=\"color:");
      out.print( color );
      out.write("\"> <font face=\"");
      out.print(font);
      out.write("\">\r\n");
      out.write("    ");
      out.print( text);
      out.write("</h2></font>\r\n");
      out.write("\t\t\t\t\t\t<p><img src=\"images/logo.png\"></p>\r\n");
      out.write("\t\t\t\t\t</section>\r\n");
      out.write("\t\t\t\t\t\r\n");
      out.write("\t\t\t\t\t<section class=\"st-panel st-color\" id=\"st-panel-2\">\r\n");
      out.write("\t\t\t\t\t\t<div class=\"st-deco\" data-icon=\"2\"></div>\r\n");
      out.write("\t\t\t\t\t\t\r\n");
      out.write("\t\t\t\t\t\t\r\n");
      out.write("\t\t\t\t\t\t<h2> Events </h2>\r\n");
      out.write("\r\n");
      out.write("\t\t\t\t\t\t<p> You Have to Log-In for registering and monitoring your events </p>\r\n");
      out.write("  \r\n");
      out.write("\t\t\t\t\t</section>\r\n");
      out.write("\t\t\t\t\t\r\n");
      out.write("\t\t\t\t\t<section class=\"st-panel\" id=\"st-panel-3\">\r\n");
      out.write("\t\t\t\t\t\t<div class=\"st-deco\" data-icon=\"B\"></div>\r\n");
      out.write("\t\t\t\t\t\t<h2>Results</h2>\r\n");
      out.write("\t\t\t\t\t\t<p>Events yet to begin</p>\r\n");
      out.write("\t\t\t\t\t</section>\r\n");
      out.write("\t\t\t\t\t\r\n");
      out.write("\t\t\t\t\t<section class=\"st-panel st-color\" id=\"st-panel-4\">\r\n");
      out.write("\t\t\t\t\t\t<div class=\"st-deco\" data-icon=\"x\"></div>\r\n");
      out.write("\t\t\t\t\t\t<h2>Amritamayi <br><br>Anandamayi <br><br> Chinmayi </br><br>Jyothirmayi</h2>\r\n");
      out.write("\t\t\t\t\t\t<p></p>\r\n");
      out.write("\t\t\t\t\t</section>\r\n");
      out.write("\t\t\t\t\t\r\n");
      out.write("\t\t\t\t\t<section class=\"st-panel\" id=\"st-panel-5\">\r\n");
      out.write("\t\t\t\t\t\t<div class=\"st-deco\" data-icon=\"Ã\"></div>\r\n");
      out.write("\t\t\t\t\t\t<h2>Adarsh R Nair(S6 BCA) </br>Akhila Ashok(S6 BCA) </br>Ashwin Narayanan(S6 CSE)</br>Aparna Nair(S6 BCA)</br></h2>\r\n");
      out.write("\t\t\t\t\t\t\r\n");
      out.write("\t\t\t\t\t</section>\r\n");
      out.write("\r\n");
      out.write("\t\t\t\t</div><!-- // st-scroll -->\r\n");
      out.write("\t\t\t<p>Adarsh is a student of BCA in Amrita University, Amritapuri Campus. </p>\r\n");
      out.write("<p>Specialisation : Distributed Computing </p>\r\n");
      out.write("\t\r\n");
      out.write("\t\t\t</div><!-- // st-container -->\r\n");
      out.write("\t\t\t\r\n");
      out.write("        </div>\r\n");
      out.write("\t</body>\r\n");
      out.write("</html>");
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
