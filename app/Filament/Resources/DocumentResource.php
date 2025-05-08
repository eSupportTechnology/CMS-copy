<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DocumentResource\Pages;
use App\Filament\Resources\DocumentResource\RelationManagers;
use App\Models\Document;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;


class DocumentResource extends Resource
{
    protected static ?string $model = Document::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?int $navigationSort = 4;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('inquiry_id')
                    ->relationship('inquiry', 'id')
                    ->label('Inquiry ID')
                    ->preload()
                    ->required()
                    ->searchable(),

                Select::make('document_type')
                    ->label('Type')
                    ->options([
                        'quotation' => 'Quotation',
                        'proposal' => 'Proposal',
                        'catalogue' => 'Catalogue',
                        'agreement' => 'Agreement',
                    ])
                    ->required(),

                TextInput::make('version_number')
                    ->numeric()
                    ->default(1)
                    ->required(),

                FileUpload::make('file_url')
                    ->label('Upload File')
                    ->directory('documents')
                    ->required()
                    ->downloadable(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('inquiry.id')->label('Inquiry ID')->sortable(),
                TextColumn::make('document_type')->label('Type')->badge(),
                TextColumn::make('version_number')->label('Version'),
                TextColumn::make('file_url')->label('File')->url(fn ($record) => asset('storage/' . $record->file_url), true),
                TextColumn::make('created_at')->label('Uploaded')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDocuments::route('/'),
            'create' => Pages\CreateDocument::route('/create'),
            'edit' => Pages\EditDocument::route('/{record}/edit'),
        ];
    }
}
