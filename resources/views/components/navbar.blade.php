<div class="flex justify-around bg-gray-800 text-white md:text-xl py-2">
    <div>
        <a href="/" class="{{ request()->is('/') ? 'border-b border-gray-200 rounded-none' : '' }}">Home</a>
    </div>
    <div>
        <a href="bio" class="{{ request()->is('bio') ? 'border-b border-gray-200 rounded-none' : '' }}">Bio</a>
    </div>
    <div>
        <a href="musica" class="{{ request()->is('musica') ? 'border-b border-gray-200 rounded-none' : '' }}">Musica</a>
    </div>
    <div>
        <a href="poesia" class="{{ request()->is('poesia') ? 'border-b border-gray-200 rounded-none' : '' }}">Poesia</a>
    </div>
    <div>
        <a href="pensieri" class="{{ request()->is('pensieri') ? 'border-b border-gray-200 rounded-none' : '' }}">Pensieri</a>
    </div>
</div>
