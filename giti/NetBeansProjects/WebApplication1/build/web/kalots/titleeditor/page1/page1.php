   <%@page import="java.sql.*"%>
<%

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
%>


<html>
<head>
<title>Content Management System</title>
  
<head>
<body>
<h1>The content editor of page 1 title</h1>
</br>
</br>
<form name="f1" action="p1.php">
Content : <input type="text" name="c1" value = <%= text%> >
</br>
<form name="f2" action="p1.php">
Color : <input type="text" name="c2" value = <%= color%> >
</br>
<form name="f3" action="p1.php">
style : <input type="text" name="c3" value = <%= font%> >
<input type="submit">
</form
    
   
</body>
</html> 