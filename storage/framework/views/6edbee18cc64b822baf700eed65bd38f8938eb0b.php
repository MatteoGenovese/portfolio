<div class="col-2 text-danger">
    *Campi obbligatori
</div>

<div class="form-group col-12 position-relative">
    <label for="title">Titolo *</label>
    <input type="text" class="form-control" id="title"  placeholder="Inserisci il titolo" name="title" value="<?php echo e(old('title', $apartment->title)); ?>">
    <div class="invalid-tooltip mt-1">
        Il titolo deve contenere tra i 10 ed i 100 caratteri
     </div>
    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="alert alert-danger" role="alert">
            <strong><?php echo e($message); ?></strong>
        </div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="row d-flex">

    <div class="col-7 col-sm-8 col-lg-10 ">
        <div class="form-group mt-4 position-relative">
            <label for="description">Descrizione *</label>
            <textarea name="description" id="description" class="form-control" placeholder="Inserisci la descrizione" rows="13" style=" resize: none; "><?php echo e(old('description', $apartment->description)); ?></textarea>
            <div class="invalid-tooltip mt-1">
                La descrizione deve contenere tra i 10 ed i 100 caratteri
             </div>
        </div>
        <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger" role="alert">
                <strong><?php echo e($message); ?></strong>
            </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="col-5 col-sm-4 col-lg-2 mt-4">
        <label for="services">Servizi *</label>
        <?php $__empty_1 = true; $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="form-check form-switch">

            <?php if($errors->any()): ?>
                <input name="services[]" class="form-check-input  services-check"
                value="<?php echo e($service->id); ?>" type="checkbox" role="switch" id="services"
                <?php echo e(in_array($service->id, old('services', [])) ? 'checked' : ''); ?>>
                <label class="form-check-label" for="services"><?php echo e($service->name); ?></label>
            <?php else: ?>
                <input name="services[]" class="form-check-input  services-check"
                value="<?php echo e($service->id); ?>" type="checkbox" role="switch" id="services"
                <?php if(isset($apartment)): ?> <?php echo e($apartment->services->contains($service) ? 'checked' : ''); ?> <?php endif; ?>>
                <label class="form-check-label" for="services"><?php echo e($service->name); ?></label>
            <?php endif; ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

        <?php endif; ?>
        <div class="position-relative">
            <input type="text" id="tagsCheck" class="d-none">
            <div class="invalid-tooltip mt-1">
                Inserisci almeno un servizio
            </div>
        </div>
        <?php $__errorArgs = ['services'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger" role="alert">
                <strong><?php echo e($message); ?></strong>
            </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
</div>



<div class="row">

    <div class="col-6 col-md-3">
        <div class="form-group mt-4 position-relative">
            <label for="bathroom-no">Numero di bagni *</label>
            <input type="number" class="form-control" id="bathroom-no"  placeholder="Inserisci il numero di bagni" name="bathroom_no" value="<?php echo e(old('bathroom_no', $apartment->bathroom_no)); ?>">
            <div class="invalid-tooltip mt-1">
               L'abitazione dovrà avere tra 1 e 10 bagni.
             </div>
        </div>
        <?php $__errorArgs = ['bathroom_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger" role="alert">
                <strong><?php echo e($message); ?></strong>
            </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="col-6 col-md-3">

        <div class="form-group mt-4 position-relative">
            <label for="bed-no">Numero di letti *</label>
            <input type="number" class="form-control" id="bed-no"  placeholder="Inserisci il numero di letti" name="bed_no" value="<?php echo e(old('bed_no', $apartment->bed_no)); ?>">
            <div class="invalid-tooltip mt-1">
                L'abitazione dovrà avere tra 1 e 10 posti letto.
            </div>
        </div>
            <?php $__errorArgs = ['bed_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="col-6 col-md-3">
        <div class="form-group mt-4 position-relative">
            <label for="rooms-no">Numero di stanze *</label>
            <input type="number" class="form-control" id="rooms-no"  placeholder="Inserisci il numero di stanze" name="room_no" value="<?php echo e(old('room_no', $apartment->room_no)); ?>">
            <div class="invalid-tooltip mt-1">
                L'abitazione dovrà avere tra 1 e 20 stanze.
            </div>
        </div>

            <?php $__errorArgs = ['room_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="col-6 col-md-3">
        <div class="form-group mt-4 position-relative">
            <label for="square-meters">Metri quadri *</label>
            <input type="number" class="form-control" id="square-meters"  placeholder="Inserisci il numero di metri quadri dell'abitazione" name="square_meters" value="<?php echo e(old('square_meters', $apartment->square_meters)); ?>">
            <div class="invalid-tooltip mt-1">
                Minimo 10 metri quadri.
            </div>
        </div>
        <?php $__errorArgs = ['square_meters'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger" role="alert">
                <strong><?php echo e($message); ?></strong>
            </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

</div>

<div class="row">

    <div class="col-6 col-md-9">
        <div class="form-group mt-4 position-relative">
            <label for="address">Indirizzo *</label>
            <input type="text" list="addresses" class="form-control" id="address"  placeholder="Indirizzo, Città, Provincia..." name="address" value="<?php echo e(old('address', $apartment->address)); ?>">
            <div class="invalid-tooltip mt-1">
               Inserisci un indirizzo valido dalla lista.
            </div>
            <ul class="list-group" id="addresses" >
            </ul>
        </div>
        <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger" role="alert">
                <strong><?php echo e($message); ?></strong>
            </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="col-6 col-md-3">
        <div class="form-group mt-4 position-relative">
            <label for="upload">Foto <?php echo e($isRequired); ?></label>

            <input type="file" class="form-control" id="upload" placeholder="Inserisci una foto" name="file_name">
            <div class="invalid-tooltip mt-1">
               Inserisci una foto. Dimensione massima 5MB. Formati accettati: JPEG, JPG, PNG.
             </div>
        </div>
        <?php $__errorArgs = ['file_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger" role="alert">
                <strong><?php echo e($message); ?></strong>
            </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
</div>
<label class="d-none" for="lat">lat</label>
<input type="text" class="d-none" name="latitude" id="lat" value="<?php echo e(old("latitude", $apartment->latitude)); ?>">
<label class="d-none" for="lon">lon</label>
<input type="text" class="d-none" name="longitude" id="lon" value="<?php echo e(old("longitude", $apartment->longitude)); ?>">

<div class="row mt-4">

    <div class="col-2">
        <div class="form-check form-switch">
            <label for="available-check">Disponibile</label>
            <?php if($errors->any()): ?>
                <input type="checkbox" name="is_available" id="available-check" class="form-check-input" value="1" <?php echo e(old("is_available") == true ? "checked" : " "); ?>>
            <?php else: ?>
                <input type="checkbox" name="is_available" id="available-check" class="form-check-input" value="1" <?php echo e($apartment->is_available == 1 ? "checked" : " "); ?>>
            <?php endif; ?>

        </div>
    </div>


    <div class="col-2 offset-8 text-end">
        <button type="submit" class="btn btn-success mx-3" id="submit-button">Invia</button>
    </div>
</div>
<?php /**PATH /Users/matteogenovese/Programmazione/portfolio-laravel/portfolio/resources/views/user/boolbnb/apartments/includes/form.blade.php ENDPATH**/ ?>