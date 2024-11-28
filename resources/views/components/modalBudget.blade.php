<div id="presupuesto" class="uk-modal-full" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
        
        <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
            <!-- Imagen de fondo en el lado izquierdo -->
            <div class="uk-background-cover modal-img" style="background-image: url('https://images.unsplash.com/photo-1649766964924-1d257ddf0742?q=80&w=2050&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); height: 100vh;"></div>
            
            <!-- Formulario de Cotización en el lado derecho -->
            <div class="uk-padding-large" style="height: 100vh; overflow-y: auto;">
                <h2 class="uk-text-bold">Solicita tu Cotización</h2>
                <p>Por favor completa los siguientes campos para obtener una cotización personalizada para tu proyecto de construcción o remodelación.</p>
                
                <form action="{{ route('budget.send') }}" method="POST" class="uk-form-stacked">
                    @csrf
                    @method('POST')
                    <!-- Nombre Completo -->
                    <div class="uk-margin">
                        <label class="uk-form-label" for="nombre">Nombre Completo</label>
                        <div class="uk-form-controls">
                            <input class="uk-input uk-form-small" id="nombre" name="nombre" type="text" placeholder="Tu nombre completo" required>
                        </div>
                    </div>
                
                    <!-- Correo Electrónico -->
                    <div class="uk-margin">
                        <label class="uk-form-label" for="correo">Correo Electrónico</label>
                        <div class="uk-form-controls">
                            <input class="uk-input uk-form-small" id="correo" name="correo" type="email" placeholder="correo@ejemplo.com" required>
                        </div>
                    </div>
                
                    <!-- Teléfono -->
                    <div class="uk-margin">
                        <label class="uk-form-label" for="telefono">Teléfono</label>
                        <div class="uk-form-controls">
                            <input class="uk-input uk-form-small" id="telefono" name="telefono" type="tel" placeholder="5589653091" required>
                        </div>
                    </div>
                
                    <!-- Tipo de Servicio -->
                    <div class="uk-margin">
                        <label class="uk-form-label" for="servicio">Tipo de Servicio</label>
                        <div class="uk-form-controls">
                            <select class="uk-select uk-form-small" id="servicio" name="servicio" required>
                                <option value="" disabled selected>Selecciona el tipo de servicio</option>
                                <option value="construccion">Construcción</option>
                                <option value="remodelacion">Remodelación</option>
                                <option value="mantenimiento">Mantenimiento</option>
                            </select>
                        </div>
                    </div>
                
                    <!-- Área Aproximada en m² -->
                    <div class="uk-margin">
                        <label class="uk-form-label" for="area">Área Aproximada (m²)</label>
                        <div class="uk-form-controls">
                            <input class="uk-input uk-form-small" id="area" name="area" type="number" placeholder="Área aproximada en m²" required min="0">
                        </div>
                    </div>
                
                    <!-- Materiales Preferidos -->
                    <div class="uk-margin">
                        <label class="uk-form-label" for="materiales">Materiales Preferidos</label>
                        <div class="uk-form-controls">
                            <textarea class="uk-textarea uk-form-small" id="materiales" name="materiales" rows="3" placeholder="Especifica si tienes preferencias de materiales (opcional)"></textarea>
                        </div>
                    </div>
                
                    <!-- Presupuesto Estimado -->
                    <div class="uk-margin">
                        <label class="uk-form-label" for="presupuesto">Presupuesto Estimado</label>
                        <div class="uk-form-controls">
                            <input class="uk-input uk-form-small" id="presupuesto" name="presupuesto" type="number" placeholder="Indica tu presupuesto estimado (opcional)">
                        </div>
                    </div>
                
                    <!-- Mensaje Adicional -->
                    <div class="uk-margin">
                        <label class="uk-form-label" for="mensaje">Descripción Adicional</label>
                        <div class="uk-form-controls">
                            <textarea class="uk-textarea uk-form-small" id="mensaje" name="mensaje" rows="5" placeholder="Proporciona detalles adicionales sobre tu proyecto"></textarea>
                        </div>
                    </div>
                
                    <!-- Botón de Enviar -->
                    <div class="uk-margin">
                        <button type="submit" class="uk-button uk-button-primary uk-width-1-1">Solicitar Cotización</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
