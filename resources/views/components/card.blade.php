<div {{ $attributes(["class" => "card shadow mb-4 px-0"]) }}>
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{ $heading }}</h6>
    </div>
    <div class="card-body">
        {{ $slot }}
    </div>
</div>