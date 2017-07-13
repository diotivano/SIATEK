 </div>

    </div>
    <script src="template/assets/js/jquery.min.js"></script>
    <script src="template/assets/js/bootstrap.min.js"></script>
    <script>
    var d = new Date();
    document.getElementById("tanggal").innerHTML = d.toDateString();

    $(function(){
    $('a#logout').click(function(){
            if(confirm('Apakah anda yakin ingin logout?')) {
                return true;
            }

            return false;
        });
    });

    $('form').on('submit',function(){
           alert('submitted');
    });

    </script>
</body>
</html>