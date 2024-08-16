<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<div class="container">
    <div class="body">
        <div>
            <h2>Table Mahasiswa</h2>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                {{--  <th scope="col"></th>
                <th scope="col">Handle</th>  --}}
                </tr>
            </thead>
            <tbody>
                <?php $no =0;  ?>
                @foreach($user as $org)
                <?php $no++; ?>
                <tr>
                <th scope="row">{{$no}}</th>
                <td>{{$org->name}}</td>
                </tr>
                @endforeach

            </tbody>
            </table>
        </div>

        <h2>tabel nilai</h2>
        <div>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">ID_User</th>
                <th scope="col">Tugas</th>
                <th scope="col">PR</th>
                <th scope="col">UTS</th>
                <th scope="col">UAS</th>
                <th scope="col">Nilai Total</th>
                </tr>
            </thead>
            <tbody>
                <?php $no =0;  ?>
                @foreach($user as $org)
                @foreach($org->Nilai as $nil)
                <?php $no++; ?>
                <tr>
                <th scope="row">{{$no}}</th>
                <td>{{$nil->user_id}}</td>
                <td>{{$nil->tugas}}</td>
                <td>{{$nil->pr}}</td>
                <td>{{$nil->uts}}</td>
                <td>{{$nil->uas}}</td>
                <td>{{$nil->tugas + $nil->pr+ $nil->uts+ $nil->uas}}</td>
                </tr>
                @endforeach
                @endforeach

            </tbody>
            </table>
        </div>

        <h2>tabel nilai akhir</h2>
        <div>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">NILAI</th>
                </tr>
            </thead>
            <tbody>
                <?php $no =0;  ?>
                @foreach($user as $org)
                {{--  @foreach($org->Nilai as $nil)  --}}
                <?php $no++; ?>
                <tr>
                <th scope="row">{{$no}}</th>
                <td>{{$org->name}}</td>
                <td>Nilai Akhir</td>
                </tr>
                {{--  @endforeach  --}}
                @endforeach

            </tbody>
            </table>
        </div>
        <p style="text-color:red;">Keterangan : Nilai Akhir adalah rata-rata dari jumlah nilai total mhs per id_user</p><br>
        <p style="text-color:red;">Contoh hasil dari Nilai akhir </p><br>
        <p>1. Agus (26+30+18)/3 = 24,6</p><br>
        <p>2. Barak (22+18)/2 = 20</p><br>
        <p>3. Heru 21</p><br>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
