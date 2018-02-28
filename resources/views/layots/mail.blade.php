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
                <form method="post" id="contactform" class="validateform">
                    {{ csrf_field() }}

                    <div id="sendmessage" class="alert alert-success d-none" role="alert">
                        Ваше сообщение отправлено!
                    </div>
                    <div id="senderror" class="alert alert-danger d-none" role="alert">
                        При отправке сообщения произошла ошибка.
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Ваше Ім'я">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="tel" placeholder="Ваш номер телефону">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control"name="email" placeholder="Ваш Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" placeholder="Тема повідомленя" required/>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" name="massage"
                                  placeholder="Повідомлення"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info">Відправити</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>