<?php $__env->startSection('container'); ?>
<p class="d-flex justify-content-center mt-5">Tabel umur anak binus</p>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Umur</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Bintang</td>
        <td>21</td>
        <td>besar</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jonathan Edward</td>
        <td>19</td>
        <td>kecil</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Calvin</td>
        <td>19</td>
        <td>kecil</td>
      </tr>
        <th scope="row">4</th>
        <td>Edo</td>
        <td>19</td>
        <td>kecil</td>
        </tr>
    </tbody>
  </table>
  <p class="d-flex justify-content-center mt-5">Cek umurmu disini...</p>

  <div class="d-flex justify-content-center mt-5" style="height: 100px;" >
    <a href="umur" >
        <button type="button"  class=" btn btn-dark" >Umur berapa kamu</button>
    </a>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\binta\Downloads\New folder (12)\project1\resources\views/tabel1.blade.php ENDPATH**/ ?>