<!-- <script>
    document.cookie = "username=John Doe";
</script> -->

<!-- <script>
    Cookies.set('Message', 'Hello C-Sharp Corner')
    var CookieValue = Cookies.get('Message')
    alert(CookieValue);
</script> -->

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">delete item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post">
                <div class="modal-body">
                    <div class="form-group">
                        are you sure? <?php echo $id ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="modalClose" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-danger" id="saveDeleteModal" name="submitDeleteModal" value="delete">
                </div>
            </form>
        </div>
    </div>
</div>