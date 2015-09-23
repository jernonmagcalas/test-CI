echo "${TRAVIS_PULL_REQUEST}"
git fetch origin
git checkout origin master
git merge origin staging
git push origin master