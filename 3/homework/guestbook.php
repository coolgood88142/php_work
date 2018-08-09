<html>
  <head>
    <title>寄信</title>
  </head>
  <body>

  
    <form action="submit.php" method="post">
      <table width="300" hight="600" alert="left">
        <tr>
          <td width="30%">
            姓名: 
          </td>
          <td>
            <input type="text" name="username" value="" /></br></br>
          </td>
        </tr> 
        <tr>
        <td width="30%">
          郵件地址: 
          </td>
          <td>
            <input type="text" name="email" value="eric88142@yahoo.com.tw" /></br></br>
          </td>
        </tr>
        <tr>
        <td width="30%">
          留言區域:
          <td>
          <textarea  type="text" name="message" value="" ></textarea></br></br>
          </td>
        </tr>
</table>
　      <input type="submit" value="送出留言"/>&nbsp;&nbsp;<input type="button" value="重設欄位"/>
    </form>  
    </br>
    | <a href="guestbook.php">新增留言</a> | <a href="showmessage.php">檢視留言</a> |
  

  </body>
</html>