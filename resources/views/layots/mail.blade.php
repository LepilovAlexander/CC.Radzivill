<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Ваша Заявка</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Ваше Ім'я">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="tel" name="tel" placeholder="Ваш номер телефону">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Ваш Email">
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" id="massage" rows="5" name="massage"
                                  placeholder="Повідомлення"></textarea>
                    </div>

                </form>
                <div class="modal-footer">
                    <button type="submit" id="send" name="send_message" class="btn btn-info">Відправити</button>
                </div>
            </div>
        </div>
    </div>
</div>