</div><!-- /container-->   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" 
    crossorigin="anonymous"></script>
    <script>
    function reply(sender) {
        var parentCommentId = sender.dataset.parent;
        document.getElementById('parentComment').value = parentCommentId;
    }
    </script>
</body>
</html>