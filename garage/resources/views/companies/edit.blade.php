    <div class="modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Redaguoti įmonę</h5>
                    <button type="button" class="close" data-close>
                    </button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Tipas</label>
                            <input type="text" name="type" class="form-control" value="{{ $company->type }}">
                        </div>
                        <div class="form-group">
                            <label>Pavadinimas</label>
                            <input type="text" name="name" class="form-control" value="{{ $company->name }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-update data-url="{{ route('companies-update', $company) }}"
                            class="btn btn-info">Išsaugoti</button>
                        <button type="button" data-close class="btn btn-secondary">Atšaukti</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
