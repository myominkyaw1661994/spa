<template>
       <div class="contaner m-5">
           <div class="row justify-content-end">
               <div class="col-4">
                   <button class="btn btn-primary btn-sm">Create</button>
               </div>
               <div class="col-4">
                   <form>
                       <div class="input-group">
                           <input type="text" class="form-control" placeholder="search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary btn-sm">Search</button>
                            </div>
                       </div>
                   </form>
               </div>
           </div>
           <div class="row">
               <div class="col-4">
                   <div class="card m-5">
                       <div class="card-header">Create</div>
                       <div class="card-body">
                           <form>
                               <div class="form-group">
                                   <label>Name</label>
                                   <input class="form-control" type="text"/>
                               </div>
                               <div class="form-group">
                                   <label>Price</label>
                                   <input class="form-control" type="text"/>
                               </div>
                               <button class="btn btn-primary">Save</button>
                           </form>
                       </div>
                   </div>
               </div>
               <div class="col-8">
                    <table class="table mt-2">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>
                                <button class="btn btn-success btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                   </table>
               </div>
           </div>
       </div>

</template>
<script>
export default {
    
}
</script>