echo "$TRAVIS_REPO_SLUG"
git remote add origin https://github.com/$TRAVIS_REPO_SLUG.git
git fetch origin
git checkout origin master
git merge origin staging
git push origin master