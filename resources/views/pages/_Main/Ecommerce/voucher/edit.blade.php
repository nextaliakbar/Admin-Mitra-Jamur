<div class="modal fade" id="editVoucherModal" role="dialog" aria-labelledby="verifyModalContent" aria-hidden="true"
  tabindex="-1">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="verifyModalContent_title">Edit Voucher</h5>
        <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" id="editVoucherForm" novalidate>
          @csrf
          <input id="editId" type="text" hidden>
          <div class="form-group">
            <label for="editName">Voucher Name</label>
            <small class="text-danger">*</small>
            <input class="form-control" id="editName" type="text" placeholder="e.g. Offer" required>
          </div>
          <div class="d-flex justify-content-end">
            <button class="btn btn-warning updateVoucher mt-2" type="submit">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
