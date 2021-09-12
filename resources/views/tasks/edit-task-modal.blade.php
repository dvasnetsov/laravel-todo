<div class="modal fade update-task" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Редактировать задачу</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                 <form action="{{ route('update.task') }}" method="POST" id="update-task-form">
                    @csrf
                    <input type="hidden" name="id">
                    <div class="form-group">
                        <label for="">Название</label>
                        <input type="text" class="form-control" name="title" placeholder="Введите название">
                        <span class="text-danger error-text title_error"></span>
                    </div>
                    <div class="form-group mb-0">
                        <label for="customFile">Изображение</label>
                        <input class="image_del" type="hidden" name="image_del" val="0">
                        <div class="container">
                            <div class="row">
                                <div class="col-8">
                                    <div class="custom-file" id="customFile" lang="ru">
                                        <input name="image" type="file" class="custom-file-input image-picker" id="add-image" aria-describedby="fileHelp">
                                        <label class="custom-file-label" for="add-image">
                                           Выбрать файл...
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <input class="btn btn-danger delete-file" type="button" value="Удалить">
                                </div>
                            </div>
                        </div>
                        <span class="text-danger error-text image_error"></span>
                        <img class="image-preview file-preview mt-3" src="#" alt="" width="150px" />
                    </div>
                    <div class="form-group">
                        <label for="title">Теги</label>
                        <input class="form-control" name="tags" type="text" value="" data-role="tagsinput">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-success">Сохранить</button>
                    </div>
                 </form>
            </div>
        </div>
    </div>
</div>