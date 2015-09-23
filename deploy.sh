
if [ $TRAVIS_PULL_REQUEST = false ]; then
    exit 0;
fi

set -ev

if[ $(TRAVIS_BRANCH) = 'staging' ] && (exit 0;)

git config --global user.email = 'jernonmagcalas@gmail.com'
git config --global user.name = 'jernon magcalas'

git remote add repoo https://c32eb8616a51943af4dea2895426f5fbc07f5aaa@github.com/$TRAVIS_REPO_SLUG.git
git fetch repoo
git stash
git checkout repoo/staging
git merge $TRAVIS_COMMIT
git push repoo HEAD:staging