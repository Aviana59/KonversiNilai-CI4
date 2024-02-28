<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Konversi Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="fluid-container">
        <h3 class="text-center mt-5 mb-4">Penghitungan Nilai</h3>
        <div class="card col-md-4 mx-auto">
            <div class="card-header">
                <h5>Masukan Nilai</h5>
            </div>
            <div class="card-body">
                <form method="post" class="row">
                    <div class="mb-2">
                        <label class="form-label" for="">Partisipasi</label>
                        <input class="form-control" type="number" step="any" name="partisipasi" required />
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="">Tugas</label>
                        <input class="form-control" type="number" step="any" name="tugas" required />
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="">UTS</label>
                        <input class="form-control" type="number" step="any" name="uts" required />
                    </div>
                    <div class="mb-2">
                        <label class="form-label" for="">UAS</label>
                        <input class="form-control" type="number" step="any" name="uas" required />
                    </div>
                    <div class="">
                        <button class="btn btn-primary float-end mt-3" type="submit" name="kirim"> Kirim & hitung </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    </section>
    </main>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>