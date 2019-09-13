<?php $__env->startSection('content'); ?>

<h1>Register To PetCare Now</h1>

<section class="post-area">
        <br>
        <?php echo $__env->make('flash_message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="container">
            <div class="row justify-content-center d-flex">
                <div class="col-lg-8">
                    <div class="single-post d-flex flex-row justify-content-center">
                        <div class="col-lg-10">
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="mt-20">
                                        <?php echo Form::model($data['qualification'], ['route' => 'storeQualification']); ?>


                                        <div class="mt-20">
                                            Type of Qualification:
                                            <br><br>
                                            <div class="form-select " id="default-select">
                                            <select name="type" class="form-select">
                                                    <option disabled selected value >  Select a type  </option>
                                                <br>
                                                <?php $__currentLoopData = $data['type']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($type); ?>"><?php echo e($type); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="mt-20">
                                        Title:

                                        <br>
                                          <?php echo Form::text('title', '', ['class' => 'single-input']); ?>

                                    </div>

                                    <div class="mt-20">

                                    Organisation:

                                    <br>
                                      <?php echo Form::text('organisation', '', ['class' => 'single-input']); ?>

                                    </div>

                            <div class="mt-20">

                                    Time Period:

                                    <br>
                                      <?php echo Form::text('time', '', ['class' => 'single-input']); ?>

                                    </div>



                                    <div class="mt-10">
                                       Description:     
                                              
                                        <br>
                                                          <?php echo Form::textarea('description', '', ['class' => 'single-textarea']); ?>

                                                        <br>
                                    </div>


                                    <?php echo Form::hidden('jobseeker_id', Auth::user()->id, ['class' => 'single-input']); ?>

                                        <div class="mt-10">
                                            <button class="genric-btn success" type="submit" style="width:100%;"><span style="font-size: 20px">Submit</span></button>
                                        </div>
                                        </div>
                                    </div>
                            <?php echo Form::close(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>