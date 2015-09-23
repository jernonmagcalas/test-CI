echo "$TRAVIS_REPO_SLUG"
git remote add repoo https://github.com/$TRAVIS_REPO_SLUG.git
git fetch repoo
git checkout repoo master
git merge repoo staging
git push repoo master