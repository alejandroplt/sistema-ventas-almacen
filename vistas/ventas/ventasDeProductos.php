<h4>Vender un producto</h4>
<div class="row">
    <div class="col-sm-4">
        <form id="frmVentasProductos">
            <label>Selecciona cliente</label>
            <select class="form-control input-sm" id="clienteVenta" name="clienteVenta">
                <option value="A">Selecciona</option>
            </select>
            <label>Producto</label>
            <select class="form-control input-sm" id="productoVenta" name="productoVenta">
                <option value="A">Selecciona</option>
            </select>
            <label>Descripción</label>
            <textarea name="" id="" class="form-control input-sm"></textarea>
            <label>Cantidad</label>
            <input type="text" class="form-control input-sm" id="" name="">
            <label>Precio</label>
            <input type="text" class="form-control input-sm" id="" name="">
            <p></p>
            <span class="btn btn-primary" id="btnAgregarVenta">Agregar</span>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#clienteVenta').select2(); //el select2 es un buscador dentro de un option
        $('#productoVenta').select2();
    });
</script>