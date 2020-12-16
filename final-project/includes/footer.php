<footer>
<ul>
    <li>Copyright &copy; <?php 
    $startDate = 2020;
    $currentDate = date('Y');
    if($startDate == $currentDate){
        echo $currentDate;
    }else{
        echo "$startDate - $currentDate";
    }
     ?> </li>
    <li>All Rights Reserved</li>
    <li>Web Design by Kate</li>
    <li>   <a href="https://validator.w3.org/check?uri=referer" 
     onclick="this.href='https://validator.w3.org/check?uri=' + document.URL">New HTML Validation</a></li>

    <li><a href="https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fkatebaldwin.dev%2FIT261%2Fwebsite%2Findex.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en">Valid CSS</a></li>
    </ul> 
</footer>
</div>  <!-- end wrapper-->

</body>

</html>