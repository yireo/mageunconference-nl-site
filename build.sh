#!/bin/bash

npm run fonts
npm run build
bin/console asset-map:compile
git commit assets/styles/ -m 'npm run build'

git push

