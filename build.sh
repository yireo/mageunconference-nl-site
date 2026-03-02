#!/bin/bash

npm run fonts
npm run build
git commit assets/styles/ -m 'npm run build'

git push

