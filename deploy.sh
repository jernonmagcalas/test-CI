echo "${TRAVIS_PULL_REQUEST}"
git checkout master
git merge staging
git push