<?php

namespace App\Observers;

use App\Models\Produto;

class ProdutoObserver
{
    /**
     * Handle the produto "created" event.
     *
     * @param  \App\Produto  $produto
     * @return void
     */
    public function created(Produto $produto)
    {
        //
    }

    /**
     * Handle the produto "updated" event.
     *
     * @param  \App\Produto  $produto
     * @return void
     */
    public function updated(Produto $produto)
    {
        //
    }

    /**
     * Handle the produto "deleted" event.
     *
     * @param  \App\Produto  $produto
     * @return void
     */
    public function deleted(Produto $produto)
    {
        if ($produto->temFoto) {
            preg_match("#.*\/([^\\\]+)\..*$#", $produto->foto, $out);
            $cloudinaryId = urldecode($out[1]);
            \Cloudder::destroyImage($cloudinaryId);
        }
    }

    /**
     * Handle the produto "restored" event.
     *
     * @param  \App\Produto  $produto
     * @return void
     */
    public function restored(Produto $produto)
    {
        //
    }

    /**
     * Handle the produto "force deleted" event.
     *
     * @param  \App\Produto  $produto
     * @return void
     */
    public function forceDeleted(Produto $produto)
    {
        //
    }
}
