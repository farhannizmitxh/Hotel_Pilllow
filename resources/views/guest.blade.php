<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Tamu - Bootstrap 5</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="card shadow">
      <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Form Tamu</h4>
      </div>
      <div class="card-body">
        <form id="guestForm">
          <div class="mb-3">
            <label for="guestId" class="form-label">ID</label>
            <input type="text" class="form-control" id="guestId" required>
          </div>
          <div class="mb-3">
            <label for="guestName" class="form-label">Nama</label>
            <input type="text" class="form-control" id="guestName" required>
          </div>
          <div class="mb-3">
            <label for="guestPhone" class="form-label">Nomor Telepon</label>
            <input type="tel" class="form-control" id="guestPhone" required>
          </div>
          <div class="mb-3">
            <label for="identityNumber" class="form-label">Nomor Identitas</label>
            <input type="text" class="form-control" id="identityNumber" required>
          </div>
          <div class="mb-3">
            <label for="identityPhoto" class="form-label">Foto Identitas</label>
            <input type="file" class="form-control" id="identityPhoto" accept="image/*">
          </div>
          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">Submit</button>
            <button type="button" class="btn btn-warning" onclick="enableEdit()">Edit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    const form = document.getElementById('guestForm');

    form.addEventListener('submit', function(e) {
      e.preventDefault();
      alert('Data tamu berhasil disimpan!');
      disableForm();
    });

    function disableForm() {
      [...form.elements].forEach(el => {
        if (el.type !== 'submit' && el.type !== 'button') {
          el.disabled = true;
        }
      });
    }

    function enableEdit() {
      [...form.elements].forEach(el => {
        if (el.type !== 'submit' && el.type !== 'button') {
          el.disabled = false;
        }
      });
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>