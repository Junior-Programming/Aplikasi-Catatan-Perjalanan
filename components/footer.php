    
    <footer class="container py-5 fixed-bottom">
        <div class="row">
            <div class="col-12 text-center text-black-50 small">
                Build With <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill text-danger mx-1" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
</svg> By <a href="//ytryo.my.id" class="text-primary">Ryo ID</a>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    
    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable({
                searching: false,
                paging: false,
                orderable: false,
                columnDefs: [
                    { orderable: false, targets: 3 }
                ]
            });
        } );
    </script>
</body>
</html