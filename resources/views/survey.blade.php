<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container">
        <div class="header" style="margin-top: 2%;">

        </div>
        <div class="card" style="padding:2%">
            <div class="card-header">
              Form Input Survey
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 offset-md-8">
                        <div class="row">
                            <div class="col-md-5">
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#judul">Tambah Judul</button>
                                <div class="modal fade" id="judul" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Tambah Judul Survey</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <form action="/inputJudul" method="POST">
                                            {{ csrf_field() }}
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Judul Survey</label>
                                                    <input type="text" name="judul" class="form-control">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#subjudul">Tambah Sub-judul</button>
                                <div class="modal fade" id="subjudul" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Tambah Sub Judul Survey</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <form action="/inputSubJudul" method="POST">
                                            {{ csrf_field() }}
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Sub Judul Survey</label>
                                                    <input type="text" name="subjudul" class="form-control">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Judul</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-muted">Judul Dari Survey</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sub Judul</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-muted">Sub-Judul Dari Survey</small>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="conter" value="1" readonly/>
                    <div id="total-pertanyaan">
                        <div id="set-soal1">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-1">
                                        <label for="exampleInputEmail1">Pertanyaan</label>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="row" style="margin-bottom: 10%;">
                                            <div class="col-md-3">
                                                <button type="button" id="kurang_soal" class="btn btn-danger">-</button>
                                            </div>
                                            <div class="col-md-6">
                                                <button type="button" id="tambah_soal" class="btn btn-success">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-muted">Pertanyaan Quesioner</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jawaban</label>
                                <div id="jawaban">
                                    <div id="pilihan-pert1">
                                        <div class="row" id="pilihan1" style="margin-bottom: 1%;">
                                            <div class="col-md-1">
                                                <img src="{{asset('assets/images/test.png')}}" style="width: 24px; height: 24px;"/>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="input-pilihan1" aria-describedby="emailHelp" placeholder="Pilihan Jawaban">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="pilihan-pert2">
                                        <div class="row" id="pilihan2" style="margin-bottom: 1%;">
                                            <div class="col-md-1">
                                                <img src="{{asset('assets/images/test.png')}}" style="width: 24px; height: 24px;"/>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="input-pilihan2" aria-describedby="emailHelp" placeholder="Pilihan Jawaban">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="pilihan-pert3">
                                        <div class="row" id="pilihan3" style="margin-bottom: 1%;">
                                            <div class="col-md-1">
                                                <img src="{{asset('assets/images/test.png')}}" style="width: 24px; height: 24px;"/>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="input-pilihan3" aria-describedby="emailHelp" placeholder="Pilihan Jawaban">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="pilihan-pert4">
                                        <div class="row" id="pilihan2" style="margin-bottom: 1%;">
                                            <div class="col-md-1">
                                                <img src="{{asset('assets/images/test.png')}}" style="width: 24px; height: 24px;"/>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="input-pilihan3" aria-describedby="emailHelp" placeholder="Pilihan Jawaban">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
        $(function(){
            $('#tambah_soal').click(function(e){
                var jawaban = $('#conter').val();
                n = parseInt(jawaban)+1;
                var template = "<div id='set-soal"+n+"'>"+
                            "<div class='form-group'>"+
                                "<div class='row'>"+
                                    "<div class='col-md-1'>"+
                                        "<label for='exampleInputEmail1'>Pertanyaan</label>"+
                                    "</div>"+
                                "</div>"+
                                "<input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp'>"+
                                "<small id='emailHelp' class='form-text text-muted'>Pertanyaan Quesioner</small>"+
                            "</div>"+
                            "<div class='form-group'>"+
                                "<label for='exampleInputEmail1'>Jawaban</label>"+
                                "<div id='jawaban'>"+
                                    "<div id='pilihan-pert1'>"+
                                        "<div class='row' id='pilihan1' style='margin-bottom: 1%;'>"+
                                            "<div class='col-md-1'>"+
                                                "<img src='{{asset('assets/images/test.png')}}' style='width: 24px; height: 24px;'/>"+
                                            "</div>"+
                                            "<div class='col-md-6'>"+
                                                "<input type='text' class='form-control' id='input-pilihan1' aria-describedby='emailHelp' placeholder='Pilihan Jawaban'>"+
                                            "</div>"+
                                        "</div>"+
                                    "</div>"+
                                    "<div id='pilihan-pert2'>"+
                                        "<div class='row'id='pilihan2' style='margin-bottom: 1%;'>"+
                                            "<div class='col-md-1'>"+
                                                "<img src='{{asset('assets/images/test.png')}}' style='width: 24px; height: 24px;'/>"+
                                            "</div>"+
                                            "<div class='col-md-6'>"+
                                                "<input type='text' class='form-control' id='input-pilihan2' aria-describedby='emailHelp' placeholder='Pilihan Jawaban'>"+
                                            "</div>"+
                                        "</div>"+
                                    "</div>"+
                                    "<div id='pilihan-pert3'>"+
                                        "<div class='row' id='pilihan3' style='margin-bottom: 1%;'>"+
                                            "<div class='col-md-1'>"+
                                                "<img src='{{asset('assets/images/test.png')}}' style='width: 24px; height: 24px;'/>"+
                                            "</div>"+
                                            "<div class='col-md-6'>"+
                                                "<input type='text' class='form-control' id='input-pilihan3' aria-describedby='emailHelp' placeholder='Pilihan Jawaban'>"+
                                            "</div>"+
                                        '</div>'+
                                    "</div>"+
                                    "<div id='pilihan-pert4'>"+
                                        "<div class='row' id='pilihan2' style='margin-bottom: 1%;'>"+
                                            "<div class='col-md-1'>"+
                                                "<img src='{{asset('assets/images/test.png')}}' style='width: 24px; height: 24px;'/>"+
                                            "</div>"+
                                            "<div class='col-md-6'>"+
                                                "<input type='text' class='form-control' id='input-pilihan3' aria-describedby='emailHelp' placeholder='Pilihan Jawaban'>"+
                                            "</div>"+
                                        "</div>"+
                                    "</div>"+
                                "</div>"+
                            "</div>"+
                        "</div>"
                // var template = "<div class='set-soal1'><div class='form-group'><div class='row'><div class='col-md-1'><label for='exampleInputEmail1'>Pertanyaan</label></div></div><input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp'><small id='emailHelp' class='form-text text-muted'>Pertanyaan Quesioner</small></div><div class='form-group'><label for='exampleInputEmail1'>Jawaban</label><div id='jawaban'><div id='pilihan-pert1'><div class='row' id='pilihan1' style='margin-bottom: 1%;'><div class='col-md-1'><img src='{{asset('assets/images/test.png')}}' style='width: 24px; height: 24px;'/></div><div class='col-md-6'><input type='text' class='form-control' id='input-pilihan1' aria-describedby='emailHelp' placeholder='Pilihan Jawaban'></div></div></div><div id='pilihan-pert2'><div class='row' id='pilihan2' style='margin-bottom: 1%;'><div class='col-md-1'><img src='{{asset('assets/images/test.png')}}' style='width: 24px; height: 24px;'/></div><div class='col-md-6'><input type='text' class='form-control' id='input-pilihan2' aria-describedby='emailHelp' placeholder='Pilihan Jawaban'></div></div></div></div><div class='row' style='margin-bottom: 1%;'><div class='col-md-1 offset-md-7'><div class='row'><div class='col-md-6'><button type='button' id='hapus_pilihan' class='btn btn-danger'>-</button></div><div class='col-md-6'><button type='button' id='tambah_pilihan' class='btn btn-success'>+</button></div></div></div></div></div></div>";
                $('#total-pertanyaan').append(template);
                $('#conter').val(n);
            })
            $('#kurang_soal').click(function(e){
                var jawaban = $('#conter').val();
                if(jawaban!=1){
                    $('#set-soal'+jawaban).remove();
                    var nilai_akhir = parseInt(jawaban)-1;
                    $('#conter').val(nilai_akhir);
                }else{
                    $('#conter').val(1);
                } 
            })
        })
    </script>
</body>
</html>