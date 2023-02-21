<!-- Modal -->
<div class="modal fade" id="nuevoModalFabricante" tabindex="-1" aria-labelledby="nuevoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nuevoModalLabel">Agregar Nuevo Fabricante</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./controller/Nuevo.php" method="post" autocomplete="off" enctype="multipart/form-data">
                    <!-- CAPTURA FABRICANTE-->
                    <div class="mb-3 mt-3">
                        <label for="campob" class="form-label">FARBICANTE: </label>
                        <input class="form-control" type="text" id="lote" name="lote" required autofocus>
                    </div>
                    <!-- CAPTURA ORIGEN-->
                    <div class="mb-1">
                        <label for="origen" class="form-label">ORIGEN</label>
                        <input class="form-control"  list="origen" class="form-control" type="text" id="origen" name="origen">
                        <datalist id="origen" style="list-style-type:none" class="list-group">
                            <option value="NACIONAL">
                            <option value="EXTRANJERO">
                        </datalist>
                    </div>
                    <!-- CAPTURA CANTIDAD-->
                    <div class="mb-1">
                        <label for="paiso" class="form-label">PAIS DE ORIGEN: </label><br>
                        <input class="form-control" type="text" id="paiso" name="paiso">
                        <datalist id="paiso" style="list-style-type: none" class="list-group"></datalist>
                    </div>
                    <!-- CAPTURA UNIDAD-->
                    <div class="mb-1">
                        <label for="nota" class="form-label">NOTA: </label>
                        <textarea class="form-select" id="nota" name="nota" rows="3">
                        </textarea>
                    </div>
                    <div class=" col-md-10">
                        <!-- BOTONES -->
                        <button class="btn btn-success" type="submit" id="captura_lote"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>