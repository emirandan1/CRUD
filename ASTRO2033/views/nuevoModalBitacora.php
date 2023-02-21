<!-- Modal -->
<div class="modal fade" id="nuevoModalBitacora" tabindex="-1" aria-labelledby="nuevoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nuevoModalLabel">Nueva Cotización</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./controller/Nuevo.php" method="post" autocomplete="off" enctype="multipart/form-data">
                    <!-- CAPTURA LOTE-->
                    <div class="mb-1">
                        <label for="nproduct" class="form-label">NOMBRE FABRICANTE:</label>
                        <input list="lista" class="form-control" type="text" id="nproduct" name="nproduct">
                        <datalist id="lista" style="list-style-type: none" class="list-group"></datalist>
                    </div>
                    <!-- CAPTURA PRODUCTO-->
                    <div class="mb-1">
                        <label for="nproduct" class="form-label">NOMBRE PRODUCTO:</label>
                        <input list="lista" class="form-control" type="text" id="nproduct" name="nproduct">
                        <datalist id="lista" style="list-style-type: none" class="list-group"></datalist>
                    </div>
                    <!-- CAPTURA NOTA-->
                    <div class="mb-1">
                        <label for="nota" class="form-label">NOTA:</label><br>
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