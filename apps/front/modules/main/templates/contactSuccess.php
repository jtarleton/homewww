<style type="text/css">
textarea#msg {
	width:683px; height:100px;
}

.button1 {
 
    font-family: Verdana, Geneva, sans-serif;
    font-size: 24px;
    color: #FFF;
    padding: 5px 10px 5px 10px;
    border: solid 1px #CCC;
 
    background: #ba4742;
    text-shadow: 0px 1px 0px #000;
 
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
 
    box-shadow: 0 1px 3px #111;
    -moz-box-shadow: 3px 3px 1px #999;
    -webkit-box-shadow: 3px 3px 1px #999;
 
    cursor: pointer;
 
}
.button1:hover {
    background: #a33f3a;
}

</style>
<h1>Contact Me</h1>
<form action="http://www.jamestarleton.com/contact" method="post">
  <table  width="100%" cellspacing="20"><tbody>
    <?php echo $form; ?>
    <tr>
      <td colspan="2">
        <input value="Send" type="submit" class="button1">
      </td>
    </tr>
  </tbody></table>
</form>