<section id="content">
  <section class="vbox">

    <section class="scrollable padder">
      <div class="row m-b-md">
        <div class="col-sm-6">
          <h3 class="m-b-xs text-black">Informasi</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <section class="panel panel-info">
            <header class="panel-heading">
              <b>Tambah Informasi</b>
            </header>
            <div class="panel-body">
                <form class="bs-example form-horizontal" data-validate="parsley" action="#" method="post">
                  <div class="row">
      							<div class="col-md-12">
      								<div class="form-group">
      									<label class="col-lg-2 control-label">Judul Informasi</label>
      									<div class="col-lg-4">
      										<input type="text" class="form-control" name="judul_pengumuman" data-required="true" value=""/>
      									</div>
      								</div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Tanggal Informasi</label>
                        <div class="col-sm-4">
                          <input class="datepicker-input form-control" size="16" type="text" data-date-format="dd-mm-yyyy" name="tanggal_pembayaran" data-required="true"
                          value="" readonly/>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Isi Informasi</label>
                        <div class="col-sm-10">
                          <div class="btn-toolbar m-b-sm btn-editor" data-role="editor-toolbar" data-target="#editor">
                            <div class="btn-group">
                              <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                </ul>
                            </div>
                            <div class="btn-group">
                              <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                <li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>
                                <li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
                                <li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                              <a class="btn btn-default btn-sm" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                              <a class="btn btn-default btn-sm" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                              <a class="btn btn-default btn-sm" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                              <a class="btn btn-default btn-sm" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                            </div>
                            <div class="btn-group">
                              <a class="btn btn-default btn-sm" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                              <a class="btn btn-default btn-sm" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                              <a class="btn btn-default btn-sm" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                              <a class="btn btn-default btn-sm" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                            </div>
                            <div class="btn-group">
                              <a class="btn btn-default btn-sm" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                              <a class="btn btn-default btn-sm" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                              <a class="btn btn-default btn-sm" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                              <a class="btn btn-default btn-sm" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                            </div>
                            <div class="btn-group">
                              <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                              <div class="dropdown-menu">
                                <div class="input-group m-l-xs m-r-xs">
                                  <input class="form-control input-sm" placeholder="URL" type="text" data-edit="createLink"/>
                                  <div class="input-group-btn">
                                    <button class="btn btn-default btn-sm" type="button">Add</button>
                                  </div>
                                </div>
                              </div>
                              <a class="btn btn-default btn-sm" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                            </div>

                            <div class="btn-group hide">
                              <a class="btn btn-default btn-sm" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                              <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                            </div>
                            <div class="btn-group">
                              <a class="btn btn-default btn-sm" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                              <a class="btn btn-default btn-sm" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                            </div>
                          </div>
                          <div name id="editor" class="form-control" style="overflow:scroll;height:150px;max-height:150px">

                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Tautan</label>
                        <div class="col-lg-4">
                          <input class="form-control" name="keterangan" />
                        </div>
                      </div>
                      <div class="line line-dashed b-b line-lg pull-in"></div>
                      <div class="form-group">
                        <div class="col-lg-12">
                          <button type="submit" class=" pull-right btn btn-success btn-s-xs"><i class="fa fa-save"></i> Simpan</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            </div>
            <div class="col-sm-6">

            </div>
          </section>
        </section>
      </section>
    </section>

  </section>
