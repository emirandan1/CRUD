<!-- Modal -->
<div class="modal fade" id="nuevoModalProducto" tabindex="-1" aria-labelledby="nuevoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nuevoModalLabel">Agregar Nuevo Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./controller/Nuevo.php" method="post" autocomplete="off" enctype="multipart/form-data">
                    <!-- CAPTURA PRODUCTO-->
                    <div class="mb-1">
                        <label for="nproduct" class="form-label">NOMBRE DE PRODUCTO:</label>
                        <input list="lista" class="form-control" type="text" id="nproduct" name="nproduct">                        
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            <div class=" col-md-10"><!-- BOTON GUARDAR -->                        
                        <button class="btn btn-success" type="submit" id="captura_lote"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
                    </div>
            </div>
        </div>
    </div>
</div>