@extends('layouts-backend.app')
<main id="tt-pageContent">
    <div class="container">
        <div class="tt-wrapper-inner">
            <h1 class="tt-title-border">
                Create New Topic
            </h1>
            <form method="POST" action="{{route('veriekle')}}" class="form-default form-create-topic">
                @csrf
                <div class="form-group">
                    <label for="inputTopicTitle">Topic Title</label>
                    <div class="tt-value-wrapper">
                        <input type="text" name="title" class="form-control" id="inputTopicTitle" placeholder="Subject of your topic">
                        <span class="tt-value-input">99</span>
                    </div>
                    <div class="tt-note">Describe your topic well, while keeping the subject as short as possible.</div>
                </div>
           
                <div class="pt-editor">
                    <h6 class="pt-title">Topic Body</h6>
                 
                    <div class="form-group">
                        <textarea name="body" class="form-control" rows="5" placeholder="Lets get started"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputTopicTitle">Category</label>
                                <select name="category" class="form-control">
                                    <option value="Select">Select</option>
                                    <option value="Question">Question</option>
                                    <option value="Info">Info</option>
                                    <option value="Life">Life</option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="inputTopicTags">CID</label>
                                <input type="text" name="cid" class="form-control" id="inputTopicTags" placeholder="Use comma to separate tags">
                            </div>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-auto ml-md-auto">
                            <button class="btn btn-secondary btn-width-lg">Create Post</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
   
    </div>
</main>