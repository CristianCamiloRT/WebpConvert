<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert to Webp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section class="container">
        <form enctype="multipart/form-data" method="POST" action="functions.php">
            <div class="my-4">
                <label for="formFile" class="form-label">Seleccione el archivo a convertir</label>
                <input class="form-control" type="file" accept="image/*" id="formFile" name="uploadedfile" required>
                <div class="invalid-feedback">
                    Seleccione un archivo
                </div>
            </div>
            <div class="my-4">
                <label for="customRange3" class="form-label">Calidad de imagen (Min. 50 | Max. 100)</label>
                <input type="range" class="form-range" min="50" max="100" step="0.5" id="customRange3" name="quality">
            </div>
            <button type="submit" class="btn btn-info" name="convert">Convertir</button>
        </form>
    </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>