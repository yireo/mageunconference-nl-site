#!/bin/bash
folder=.

sudo apt-get install libavif-bin libheif-examples

find $folder -name "*.png" -o -name "*.jpg" | while read IMAGE ; do
    DIRNAME=`pwd`/`dirname $IMAGE`
    cd $DIRNAME

    IMAGE=`basename $IMAGE`

    WEBP=${IMAGE/.png/.webp}
    WEBP=${WEBP/.jpg/.webp}
    if [ ! -f "${WEBP}" ]; then
        echo "Converting $IMAGE to $WEBP in $DIRNAME"
        cwebp -q 80 -m 6 -mt $DIRNAME/$IMAGE -o $DIRNAME/$WEBP
    fi

    AVIF=${IMAGE/.png/.avif}
    AVIF=${AVIF/.jpg/.avif}
    if [ ! -f "${AVIF}" ]; then
        echo "Converting $IMAGE to $AVIF in $DIRNAME"
        avifenc $DIRNAME/$IMAGE $DIRNAME/$AVIF
    fi

    WEBP2=${IMAGE/.png/.wp2}
    WEBP2=${WEBP2/.jpg/.wp2}
    if [ ! -f "${WEBP2}" ]; then
        echo "Converting $IMAGE to $WEBP2 in $DIRNAME"
        convert $DIRNAME/$IMAGE $DIRNAME/$WEBP2
    fi

    cd - >/dev/null
done

